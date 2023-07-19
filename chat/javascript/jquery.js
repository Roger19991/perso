 $(function (){
     $(".wrapper") .fadeIn(3000);
     $('.bodyr') .slideDwon();
     $('.form signup') .click(function () {
        $('.form signup') .slideUp(2000).opacity(0) 
    });
    $(".form signup").click(function () { 
        $(".form signup").slideDwon(2000).opacity(1)
    })

 });