document.getElementById('search-text').addEventListener('input',(e)=>{
    e.preventDefault();

    var p = $('#search-text').val()
    
   
    if(p.length>=3){
        $.get(`${api_url}/options/search.php?q=${p}`,(data,status)=>{
            console.log(data)
            var pro = '<ul class="list-group">'; 
            if(data.products){
                for(var l of data.products){
                    pro+=`<a href='/products/${l.product_id}'><li class='list-group-item mb-2'>${l.product_name}<span style='float:right;'>product</span></li></a>`
                }                
            }
            if(data.pgs){
                for(var l of data.pgs){
                    pro+=`<a href='/pgs/${l.pgs_id}'><li class='list-group-item mb-2'>${l.pgs_name} in ${l.pgs_location}<span style='float:right;'>pgs</span></li></a>`
                }
            }
            if(data.products.length==0 && data.users.length==0 && data.inputs.length==0 && data.pgs.length==0){
                pro+=`<li class='list-group-item text-center text-danger'>No search results for ${p}</li>`
            }
            pro+=`</ul>`;
            $('#results').html(pro)
        })
        $('#search-results').css({display:'block'})
        
        
    }else{
        $('#search-results').css({display:'none'})
    }
})