
  $(document).ready(function(){
    $('#upload').click(function(){
      $('#show_image').html('hello');
    });

    //search
    $('#search_form').on('submit', function(e){
      e.preventDefault();
      const inputSearch = $(this).children('input').val();
      window.location.href = "tags.php?tags="+inputSearch;
    });
  });
