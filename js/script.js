function burgerMenu(selector) {
  let menu = $(selector);
  let button = menu.find('.burger-menu_button', '.burger-menu_lines');
  let links = menu.find('.burger-menu_link');
  let overlay = menu.find('.burger-menu_overlay');
  
  button.on('click', (e) => {
    e.preventDefault();
    toggleMenu();
  });
  
  links.on('click', () => toggleMenu());
  overlay.on('click', () => toggleMenu());
  
  function toggleMenu(){
    menu.toggleClass('burger-menu_active');
    
    if (menu.hasClass('burger-menu_active')) {
      $('body').css('overlow', 'hidden');
    } else {
      $('body').css('overlow', 'visible');
    }
  }
}

burgerMenu('.burger-menu');



const $drowdownArrow = document.querySelector('.fa-caret-down');
const $checkbox = document.getElementById('openDropdown');
const $dropdownMenu = document.querySelector('.dropdown-menu');

$checkbox.addEventListener('change', () => {
  $drowdownArrow.classList.toggle('rotate-dropdown-arrow');
});

$dropdownMenu.addEventListener('click', (e) => {
  $checkbox.checked = false;
  // setting checked to false won't trigger 'change'
  // event, manually dispatch an event to rotate
  // dropdown arrow icon
  $checkbox.dispatchEvent(new Event('change'));
});





const wrapper = document.createElement('div');

wrapper.innerHTML = `
<div class="contact-wrapper">
    <div class="contact-panel">
        <div class="contact-panel__header">
            Contact
        </div>

        <button class="contact-close">
            <i class="fa fa-times"></i>
        </button>

        <ul>
            <li>
                <a href="https://markodenic.com" target="_blank">
                    <i class="fa fa-link"></i>
                </a>
            </li>

            <li>
                <a href="https://www.getrevue.co/profile/denicmarko" target="_blank">
                    <i class="fa fa-envelope-o"></i>
                </a>
            </li>

            <li>
                <a href="https://www.youtube.com/channel/UCRgyPAKycnp_kkpny_uZBcQ" target="_blank">
                    <i class="fa fa-whatsapp"></i>
                </a>
            </li>
  
            <li>
                <a href="https://github.com/markodenic" target="_blank">
                    <i class="fa fa-telegram"></i>
                </a>
            </li>
        </ul>
    </div>
</div>

<button class="contact-button">
  <img src="./imgs/contact.svg" alt="">
</button>
`;
document.body.appendChild(wrapper);
const contactButton = document.querySelector('.contact-button');
const contactClose = document.querySelector('.contact-close');
const contactWrapper = document.querySelector('.contact-wrapper');

contactButton.addEventListener('click', () => {
  contactWrapper.classList.toggle('contact-wrapper--open')
});

contactClose.addEventListener('click', () => {
  contactWrapper.classList.remove('contact-wrapper--open')
});


/******************************* */

$(document).ready(function(){
  $('.floatingButton').on('click',
      function(e){
          e.preventDefault();
          $(this).toggleClass('open');
          if($(this).children('.fa').hasClass('fa-plus'))
          {
              $(this).children('.fa').removeClass('fa-plus');
              $(this).children('.fa').addClass('fa-close');
          } 
          else if ($(this).children('.fa').hasClass('fa-close')) 
          {
              $(this).children('.fa').removeClass('fa-close');
              $(this).children('.fa').addClass('fa-plus');
          }
          $('.floatingMenu').stop().slideToggle();
      }
  );
  $(this).on('click', function(e) {
    
      var container = $(".floatingButton");
      // if the target of the click isn't the container nor a descendant of the container
      if (!container.is(e.target) && $('.floatingButtonWrap').has(e.target).length === 0) 
      {
          if(container.hasClass('open'))
          {
              container.removeClass('open');
          }
          if (container.children('.fa').hasClass('fa-close')) 
          {
              container.children('.fa').removeClass('fa-close');
              container.children('.fa').addClass('fa-plus');
          }
          $('.floatingMenu').hide();
      }
    
      // if the target of the click isn't the container and a descendant of the menu
      if(!container.is(e.target) && ($('.floatingMenu').has(e.target).length > 0)) 
      {
          $('.floatingButton').removeClass('open');
          $('.floatingMenu').stop().slideToggle();
      } 
  });
});