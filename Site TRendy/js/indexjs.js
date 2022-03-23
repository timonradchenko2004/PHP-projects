   /* Modal
    =====================*/
$(function(){
    const modalCall = $("[data-modal]");
    const modalClose = $("[data-close]");
    
    modalCall.on("click", function(event) {
        event.preventDefault();

        let $this = $(this);
        let modalId = $this.data('modal');
        $(modalId).addClass('show');
        $("body").addClass('no-scroll');

        setTimeout(function() {
            $(modalId).find(".modal-container").css({
                transform: "scale(1)"
            });
        }, 200);

    });


    modalClose.on("click", function(event) {
        event.preventDefault();

        let $this = $(this);
        let modalParent = $this.parents('.modal');

        modalParent.find(".modal-container").css({
            transform: "scale(0)"
        });

        setTimeout(function() {
            modalParent.removeClass('show');
            $("body").removeClass('no-scroll');
        }, 200);
    });


    $(".modal").on("click", function(event) {
        let $this = $(this);

        $this.find(".modal-container").css({
            transform: "scale(0)"
        });

            $this.removeClass('show');
            $("body").removeClass('no-scroll');
    });

    $(".block").on("click", function(event) {
        event.stopPropagation();
    });

})
////////////////////////////////////////////////////
    let temp = document.querySelector('#bur_btn');
    let temp1 = document.querySelector('#close_btn');
    let temp2 = document.querySelector('#hmodal');

    let func = function(event)
    {
       temp.style = "display:none";
       temp1.style = 'display:block';
       temp2.style = 'display:flex';

    }
    let func1 = function(event)
    {
       temp1.style = "display:none";
       temp.style = 'display:block';
        temp2.style = 'display:none';
    }
    temp.addEventListener('click',func);
    temp1.addEventListener('click',func1);

////////////////////////////////////////////////////////


let filter = $("[data-filter]");
filter.on("click", function(event) {
    event.preventDefault();

    let cat = $(this).data('filter');
    
    if(cat == 'all') {
        $("[data-cat]").removeClass("close");
    } else {
        $("[data-cat]").each(function() {
            let workCat = $(this).data('cat');
            if(workCat != cat) {
                $(this).addClass('close');
            } else {
                $(this).removeClass('close');
            }
        });
    }
});

