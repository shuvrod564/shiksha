// Fixed to menu script 
window.onscroll = function() { 
  setFixedMenu();
  scrollFunction();
}; 
function setFixedMenu() {
  var navbar = document.getElementById("mainNav");
  if (document.body.scrollTop > 120 || document.documentElement.scrollTop > 120) {  
    navbar.classList.add("fixed-top");
  } else {
    navbar.classList.remove("fixed-top");
  }
}




/*============================= Back To Top Button Script ========================*/
var mybutton = document.getElementById("backTop");
 
function scrollFunction() {
  if (document.body.scrollTop > 120 || document.documentElement.scrollTop > 120) {
    mybutton.style.display = "flex";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// Toggle password script
document.getElementById('toggleLoginPassword').addEventListener('click', function () {
  var passwordField = document.getElementById('loginPassword');
  if (passwordField.type === 'password') {
      passwordField.type = 'text';
  } else {
      passwordField.type = 'password';
  }
});
document.getElementById('toggleSignupPassword').addEventListener('click', function () {
  var passwordField = document.getElementById('signupPassword');
  if (passwordField.type === 'password') {
      passwordField.type = 'text';
  } else {
      passwordField.type = 'password';
  }
});



(function ($) {
 
 


  // Main Header Nav links Active Class Genaretor
  $("#mainNav .navbar-nav li a").filter(function () {
    return this.href == location.href.replace(/#.*/, "");
  }).parents("li").addClass("active");
 

  // user Nav links Active Class Genaretor
  $("#userProfileNav li a").filter(function () {
    return this.href == location.href.replace(/#.*/, "");
  }).parents("li").addClass("active");
 

  // Bottom Section Products Slider Activaton Script (Homepage)
  $(".hostelCarousels").owlCarousel({
    autoplay: false, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    loop: false,
    margin: 15,
    items: 4,
    nav: false,
    dots: true,
    responsiveClass: true, 
    responsive: { 
        0: { items: 1, margin: 8 },
        576: { items: 2, margin: 10  },
        768: { items: 2, margin: 15,  },
        992: { items: 2, margin: 15,  }, 
        1200: { items: 3, margin: 15, }, 
        1400: { items: 4, }, 
    } 
  });
  $(".serviceCarousel").owlCarousel({
    autoplay: false, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    loop: false,
    margin: 15,
    items: 4,
    nav: false,
    dots: true,
    responsiveClass: true, 
    responsive: { 
        0: { items: 1, margin: 12 },
        576: { items: 1, margin: 12  },
        768: { items: 1, margin: 15,  },
        992: { items: 2, margin: 15,  }, 
        1200: { items: 3, margin: 15, }, 
        1400: { items: 4, }, 
    } 
  });
  $(".teemSlider").owlCarousel({
    autoplay: false, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    loop: false,
    margin: 15,
    items: 4,
    nav: false,
    dots: true,
    responsiveClass: true, 
    responsive: { 
        0: { items: 2, margin: 8 },
        576: { items: 2, margin: 10  },
        768: { items: 3, margin: 15,  },
        992: { items: 3, margin: 15,  }, 
        1200: { items: 3, margin: 15, }, 
        1400: { items: 3, }, 
    } 
  });
 
  $(".testimonialSlider").owlCarousel({
    autoplay: true, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    loop: true,
    margin: 20,
    items: 4,
    nav: false,
    dots: true,
    responsiveClass: true, 
    responsive: { 
        0: { items: 1 },
        576: { items: 1 },
        768: { items: 1  },
        992: { items: 2 }, 
        1200: { items: 2 },  
         
    } 
  });

  $(".blogsSlider").owlCarousel({
    autoplay: false, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    loop: false,
    margin: 15,
    items: 4,
    nav: false,
    dots: true,
    responsiveClass: true, 
    responsive: { 
        0: { items: 1, margin: 8 },
        576: { items: 2, margin: 10  },
        768: { items: 2, margin: 15,  },
        992: { items: 3, margin: 15,  }, 
        1200: { items: 3, margin: 15, }, 
        1400: { items: 3, }, 
    } 
  });

  $(".heroBannerCarousel").owlCarousel({
    autoplay: true, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 3000,
    autoplaySpeed: 3000,
    loop: true,
    margin: 0,
    items: 1,
    nav: false,
    dots: false,  
    animateOut: 'fadeOut'
  });
  

  

 

  
   
  
  // Modal Quick Enquery Form Validation Script
  $("#contactForm").submit(function () {
    if (validatecontactForm()) {
        return true;
    }
    else {
        return false;
    }
  }); 
  function validatecontactForm() {
    var valid = true;
    $(".form-control").css('border-color', '');
    $(".meerror").html('');

    // User name validation
    if (!$("#name").val()) {
        $("#name_error").html("Name is required");
        $("#name").css('border-color', '#dc3545');
        valid = false;
    } else {
        $("#name_error").html("");
        $("#name").css('border-color', '#099f1a');
    }

    //  
    if (!$("#email").val()) {
        $("#email_error").html("Email is required");
        $("#email").css('border-color', '#dc3545');
        valid = false;
    } else if (!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
        $("#email_error").html("Invalid email");
        $("#email").css('border-color', '#dc3545');
        valid = false;
    } else {
        $("#email_error").html("");
        $("#email").css('border-color', '#099f1a');
    } 

    //  
    var phno = $.trim($('#phone').val());
    var che_phno = /^[0-9]{7,15}$/;
    if (!$("#phone").val()) {
        $("#phone_error").html("Phone number required");
        $("#phone").css('border-color', '#dc3545');
        valid = false;
    } if (!che_phno.test(phno)) {
        $("#phone").css('border-color', '#dc3545');
        $("#phone_error").html('Please enter valid phone no');
        valid = false;
    } else if (phno.length < 7 || phno.length > 15) {
        $("#phone").css('border-color', '#dc3545');
        $("#phone_error").html('Phone no. must be greater than or equals to 10 and less than or equals to 15 digits!!');
        // $("#dash_phone_error").css("color", "#FC0000"); 
        valid = false;
    } else {
        $("#phone_error").html("");
        $("#phone").css('border-color', '#099f1a');
    } 
 
    return valid;
  }
 
 
 
 
})(jQuery);
 

 