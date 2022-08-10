const popup = document.querySelector('.popup');
const popup_form_phone_link = document.querySelector('#popup_form_phone_link');


const popup_engineer_btn = document.querySelector('.popup_engineer_btn');
const popup_engineer = document.querySelector('.popup_engineer');


// popups general actions
let openPopup = (activePopupClass) => {
    activePopupClass.classList.add('popup_active');
    document.body.style.overflow = 'hidden';
}

let emptyOverflow = () => {
    return document.body.style.overflow = '';
}

// close all popups using the cross
let popups_close = document.getElementsByClassName('popup_close');
for (let item of popups_close) {
    item.addEventListener('click', () => {
        popup.classList.remove('popup_active');
        popup_engineer.classList.remove('popup_active');
        emptyOverflow();

    })
}


// close all popups using escape
document.addEventListener('keydown', function (e) {
    if (e.keyCode == 27) {
        popup.classList.remove('popup_active');
        popup_engineer.classList.remove('popup_active');
        emptyOverflow();
    }
});

// end popups general actions

// call the measurer header

popup_engineer_btn.addEventListener('click', () => {
    openPopup(popup_engineer)
})

popup_engineer.addEventListener('click', (e) => {
    if (e.target === popup_engineer) {
        popup_engineer.classList.remove('popup_active');
        emptyOverflow();
    }
})

// end call the measurer header


// phone link
let phone_links = document.getElementsByClassName('phone_link');

for (let link of phone_links) {
    link.addEventListener('click', (e) => {
        e.preventDefault();
        openPopup(popup);
    });
}

popup.addEventListener('click', (e) => {
    if (e.target === popup) {
        popup.classList.remove('popup_active');
        emptyOverflow();
    }
})

// end header phone link

// open popup after 60 sec

// setTimeout(() => {
//     openPopup(popup);
// },60000)
