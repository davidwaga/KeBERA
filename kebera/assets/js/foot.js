document.getElementById('search-text').addEventListener('input',(e)=>{
    e.preventDefault();

    var p = $('#search-text').val()
    
   
    if(p.length>=3){
        
        $('#search-results').css({display:'block'})
        
        $('#results').html(p)
    }else{
        $('#search-results').css({display:'none'})
    }
})