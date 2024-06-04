//alert('hello world')
var param = document.getElementById('paramSelector')

param.addEventListener('change',()=>{  
    //alert('changes')  
    const selectedValue = this.value.toString();
    const url = new URL(window.location.href);
    url.searchParams.set('compte', selectedValue);
    window.location.href = url;

})
