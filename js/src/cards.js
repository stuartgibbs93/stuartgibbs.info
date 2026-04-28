// $(document).ready(function() {
//     var cardRowWidth,
//         cardRowHeight,
//         resizeTimeout
//     //$('#cardRow').parent().parent().removeClass('pr-0')

//     function findStartingAttr() {
//         // get parent row height and width
//         cardRowWidth = $('#cardRow').width()
//         cardRowHeight = $('#cardRow').height()
//         // set parent height and width to original (no resizing)
//         $('#cardRow').css('height', cardRowHeight).css('width', cardRowWidth)
//         $('.card').each(function(index) {
//             //get position top and left for each card
//             var cardPosLeft = $(this).position().left /// (cardRowWidth / 100)
//             var cardPosTop = $(this).position().top /// (cardRowHeight / 100)
//             //set original positions
//             $(this).css('left', cardPosLeft + 'px').css('top', cardPosTop + 'px').css('height', $(this).height()).attr('tabindex', 0)
//             //if to left of center
//         })
//         //set card position to absolute so that the cards remain lined up the same as original
//         $('.card').css('position', 'absolute')
//         // var activeCardRowDivWidth = cardRowWidth - (2 * (parseInt($('.card-body').css('padding-left'), 10) + parseInt($('.card').css('padding-left'), 10)))
//         // $('.card-body-active>div').css('width', activeCardRowDivWidth).css('min-width', activeCardRowDivWidth)
//         $('.card.active').css('old-top', $('.card.activeClone').css('old-top')).css('left', $('.card.activeClone').css('left'))
//         $('.card.activeClone').remove();
//     }
    
//     function resetAttr() {
//         clearTimeout(resizeTimeout);
//         $('#cardRow').attr('style', '');
//         $('.card').each(function(index) {
//             if ($(this).hasClass('active')) {
//                 if (!$('.card.activeClone').width()) {
//                     $(this).clone(true, true).attr('style', '').addClass('activeClone').removeClass('active').insertAfter('.card.active')
//                 }
//             } else {
//                 $(this).attr('style', '');
//             }
//         })
//         resizeTimeout = setTimeout(findStartingAttr, 500);
//     }
//     function expandCard(ele) {
//         var cardHeight = $('#clicked').outerHeight();
//         console.log(cardHeight)
//         var currentTop = parseInt($('#clicked').css('top'), 10)
//         // if card is already expanded, remove active class
//         if ($('#clicked').hasClass('active')) {
//             var adjustedCardHeight = cardHeight / 3
//             $('#clicked').css('height', parseInt($('#clicked').css('height'), 10)/2).css('top', $('#clicked').attr('old-top') + "px").attr('old-top', '').css('min-height', '0px')
//             $('#clicked').removeClass('active')
//                 .children('.card-body-active').css('opacity', '0')
//         } else {
//             // if card is not expanded, add active class
//             var adjustedCardHeight = cardHeight * 2
            
//             //if last row
//             if (currentTop + cardHeight >= cardRowHeight) {
//                 $('#clicked').css('height', adjustedCardHeight).attr('old-top', currentTop).css('top', (cardRowHeight - adjustedCardHeight))

//                 //if top row
//             } else if (currentTop == 0) {
//                 $('#clicked').css('height', adjustedCardHeight)

//                 //if middle rows
//             } else {
//                 console.log('middle row')
//                 $('#clicked').css('height', adjustedCardHeight).attr('old-top', currentTop).css('top', (currentTop - cardHeight))
//             }
//             if(ele == 'tab') {
//                 clearTimeout(tabTimeout)
//                 console.log('test')
//                 $('.card.active').addClass('closing')
//                 $('#clicked').addClass('active')
//                 $('#clicked').children('.card-body-active').css('opacity', '1')
                
//                 var tabTimeout = setTimeout(function() {
//                     $('.closing').each(function() {
//                         $(this)
//                             .css('height', (parseInt($(this).css('height'), 10) / 3))
//                             .css('top', $(this).attr('old-top') + 'px')
//                             .removeClass('active')
//                             .removeClass('closing')
//                             .children('.card-body-active').css('opacity', '0')
//                     })
//                 }, 500)
//             } else {
//                 $('.card.active')
//                     .css('height', (parseInt($('.card.active').next().css('height'), 10)))
//                     .css('top', $('.card.active').attr('old-top') + 'px')
//                     .css('min-height', '0px')
//                     .removeClass('active')
//                     .addClass('closing')
//                     .children('.card-body-active')
//                     .css('opacity', '0');
                
//                 $('#clicked').addClass('active');
//                 $('#clicked').children('.card-body-active').css('opacity', '1');
                
//                 if (parseInt($('#clicked').css('height'), 10) <= parseInt($("#clicked").children('.card-body-active').children('div').css('height'), 10)) {
//                     $("#clicked").css('min-height', 100 + parseInt($("#clicked").children('.card-body-active').children('div').css('height'), 10))
//                 }
                
//                 $('.closing').removeClass('closing')
//             }
//         }
//         $('#clicked').removeAttr('id')
//     }


//     findStartingAttr()



//     $(window).resize(function() {
//         resetAttr()
//     })

//     setTimeout(function() {
//         resetAttr();
//     }, 1000)


//     $('.card').keydown(function(e) {
//         if (e.keyCode == 13) {
//             e.stopPropagation();
//             e.preventDefault();
//             $(this).attr('id', 'clicked')
//             expandCard()
//         } else if (e.which == 9) {
//             e.stopPropagation();
//             e.preventDefault();
//             if (e.shiftKey) {
//                 console.log('shift tab pressed')
//                 $(this).prev().focus().attr('id', 'clicked')
//                 expandCard('tab')
//             } else {
//                 $(this).next().focus().attr('id', 'clicked')
//                 expandCard('tab')
//             }
//         }
//     })
//     $('.card').click(function(e) {
//         // e.stopPropagation();
//         // e.preventDefault();
//         $(this).attr('id', 'clicked')
//         expandCard()
//     })

// })