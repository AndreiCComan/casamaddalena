$(document).ready(function(){
              // Add smooth scrolling to all links in navbar + footer link
              $(".navbar a, a[href='#home']").on('click', function(event) {

              // Prevent default anchor click behavior
              event.preventDefault();

              // Store hash
              var hash = this.hash;

              // Using jQuery's animate() method to add smooth page scroll
              // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
              $('html, body').animate({
                scrollTop: $(hash).offset().top -40
                }, 900, function(){
                  $("#myNavbar").collapse("hide");
              });
              });
              $('#form-mail').on('submit',function(e){
              	e.preventDefault();
              	var details = $('#form-mail').serialize();
              	$.post('mail.php',details,function(data){
              		$('#form-mail').html('<div class="alert alert-success fade in col-sm-7 text-center"><strong>Successo!</strong> La mail è stata mandata correttamente.</div>');
              	});
              });
    
              $(window).scroll(function() {
                $(".slideanim").each(function(){
                    var pos = $(this).offset().top;

                    var winTop = $(window).scrollTop();
                        if (pos < winTop + 600) {
                            $(this).addClass("slidein");
                        }
                });
              });
});
