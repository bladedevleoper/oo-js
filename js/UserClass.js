class UserClass
{
    
    getDropdownList()
    {
        document.querySelector('#select-user').addEventListener('click', (e) => {
            
            if (e.target.value == "I need the help") {
                this.showSection(); 
            } else {
                this.hideSection();
            }
            
        });       
        
    }

    showSection()
    {
       document.querySelector('#other').removeAttribute('hidden');
    }

    hideSection()
    {
        document.querySelector('#other').setAttribute('hidden', true);
    }

}