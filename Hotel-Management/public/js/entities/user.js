$(window).on('load resize', function(){
  resizeIconsAndLabels('my-user-icon', 'my-user-label');
  resizeIconsAndLabels('my-user-company-icon', 'my-user-company-label');
});


$(function(){

  $('.my-user-delete').on('click', function(e) {
    e.preventDefault();

    $userDelete = $(this);
    $user = $userDelete.closest('.my-user');
    $label = $userDelete.closest('.my-user-type');
    userLabel = $user.find('.my-filter-target').text();


    $.ajax({
      
      url: $userDelete.attr('data-url'),
      method: 'delete',
      
      data: {
        _token: $userDelete.attr('data-token')
      },
      

      success : function(data) {

        if(data === "ok") {
          $('#my-entity-delete-status')
          .addClass('my-entity-delete-status-ok')
          .removeClass('d-none')
          .html(`<i>"${userLabel}"</i> has successfully been deleted`);

          $user.remove();
          if($label.children('.row').children().length == 0){
            $label.remove();
          }

        } 


        else {
          
          $('#my-entity-delete-status')
          .addClass('my-entity-delete-status-ko')
          .removeClass('d-none')
          .html(`Something went wrong when attempting to delete <i>"${userLabel}"</i>`);

        }

      },
      

      error: function (error) {
        
        $('#my-entity-delete-status')
        .addClass('my-entity-delete-status-ko')
        .removeClass('d-none')
        .text(error.responseJSON.message);
        
      },


      complete: function () {
        resizeLayout();
      }

    });
  });

});
