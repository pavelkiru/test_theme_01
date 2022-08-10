
//  ОСТЕКЛЕНИЕ БАЛКОНОВ И ЛОДЖИЙ

let glazing_blocks = document.querySelectorAll('.glazing_block');
let glazing_contents = document.querySelectorAll('.glazing_content');

for (let i = 0; i < glazing_blocks.length; i++) {
    glazing_blocks[i].addEventListener('click', () => {
        for(let c = 0; c < glazing_contents.length; c++) {
            glazing_contents[c].classList.remove('glazing_content_show')
            glazing_contents[i].classList.add('glazing_content_show')
        }
    })
}

// end



// ЗАКАЖИТЕ ОТДЕЛКУ БАЛКОНА

let decoration_items = document.querySelectorAll('.decoration_item');
let no_clicks = document.querySelectorAll('.no_click');
let decoration_content_items = document.querySelectorAll('.decoration_content_item');

for( let d = 0; d < decoration_items.length; d++) {
    decoration_items[d].addEventListener('click', () => {
        for(let l = 0; l < no_clicks.length; l++) {
            no_clicks[l].classList.remove('after_click');
            no_clicks[d].classList.add('after_click');
        }

        for(let k = 0; k < decoration_content_items.length; k++) {
            decoration_content_items[k].classList.remove('decoration_content_item_show');
            decoration_content_items[d].classList.add('decoration_content_item_show');
        }
    })
}


// end