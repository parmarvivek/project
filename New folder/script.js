let searchBtn = document.querySelector('#search-btn');
let searchBar = document.querySelector('.search-bar-container');
let formBtn = document.querySelector('#login-btn');
let loginForm = document.querySelector('.login-form-container');
let formClose = document.querySelector('#form-close');
let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');
let videoBtn = document.querySelectorAll('.vid-btn');

window.onscroll = () =>{
    searchBtn.classList.remove('fa-times');
    searchBar.classList.remove('active');
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    loginForm.classList.remove('active');
}

menu.addEventListener('click', () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
});

searchBtn.addEventListener('click', () =>{
    searchBtn.classList.toggle('fa-times');
    searchBar.classList.toggle('active');
});

formBtn.addEventListener('click', () =>{
    loginForm.classList.add('active');
});

formClose.addEventListener('click', () =>{
    loginForm.classList.remove('active');
});

videoBtn.forEach(btn =>{
    btn.addEventListener('click', ()=>{
        document.querySelector('.controls .active').classList.remove('active');
        btn.classList.add('active');
        let src = btn.getAttribute('data-src');
        document.querySelector('#video-slider').src = src;
    });
});

var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    loop:true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
    },
});

var swiper = new Swiper(".brand-slider", {
    spaceBetween: 20,
    loop:true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        450: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 3,
        },
        991: {
          slidesPerView: 4,
        },
        1200: {
          slidesPerView: 5,
        },
      },
});



/** Launches payment request flow when user taps on buy button. */
function onBuyClicked() {
    if (!window.PaymentRequest) {
      console.log('Web payments are not supported in this browser.');
      return;
    }
  
    // Create supported payment method.
    const supportedInstruments = [
      {
        supportedMethods: ['https://tez.google.com/pay'],
        data: {
          pa: 'merchant-vpa@xxx',
          pn: 'Merchant Name',
          tr: '1234ABCD',  // Your custom transaction reference ID
          url: 'https://url/of/the/order/in/your/website',
          mc: '1234', //Your merchant category code
          tn: 'Purchase in Merchant',
        },
      }
    ];
  
    // Create order detail data.
    const details = {
      total: {
        label: 'Total',
        amount: {
          currency: 'INR',
          value: '10.01', // sample amount
        },
      },
      displayItems: [{
        label: 'Original Amount',
        amount: {
          currency: 'INR',
          value: '10.01',
        },
      }],
    };
  
    // Create payment request object.
    let request = null;
    try {
      request = new PaymentRequest(supportedInstruments, details);
    } catch (e) {
      console.log('Payment Request Error: ' + e.message);
      return;
    }
    if (!request) {
      console.log('Web payments are not supported in this browser.');
      return;
    }
  
    var canMakePaymentPromise = checkCanMakePayment(request);
    canMakePaymentPromise
        .then((result) => {
          showPaymentUI(request, result);
        })
        .catch((err) => {
          console.log('Error calling checkCanMakePayment: ' + err);
        });
  }

  
/**
* Process the response from browser.
*
* @private
* @param {PaymentResponse} instrument The payment instrument that was authed.
*/
function processResponse(instrument) {
    var instrumentString = instrumentToJsonString(instrument);
    console.log(instrumentString);
   
    fetch('/buy', {
      method: 'POST',
      headers: new Headers({'Content-Type': 'application/json'}),
      body: instrumentString,
    })
        .then(function(buyResult) {
          if (buyResult.ok) {
            return buyResult.json();
          }
          console.log('Error sending instrument to server.');
        })
        .then(function(buyResultJson) {
          completePayment(instrument, buyResultJson.status, buyResultJson.message);
   
        })
        .catch(function(err) {
          console.log('Unable to process payment. ' + err);
        });
   }
   
   /**
   * Notify browser that the instrument authorization has completed.
   *
   * @private
   * @param {PaymentResponse} instrument The payment instrument that was authed.
   * @param {string} result Whether the auth was successful. Should be either
   * 'success' or 'fail'.
   * @param {string} msg The message to log in console.
   */
   function completePayment(instrument, result, msg) {
    instrument.complete(result)
        .then(function() {
          console.log('Payment succeeds.');
          console.log(msg);
        })
        .catch(function(err) {
          console.log(err);
        });
   }
   
    
