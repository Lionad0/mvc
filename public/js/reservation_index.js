 // const menus = document.querySelectorAll('.menu_name')
    // console.log(menus)
    // let select;
    // let selectedItem = ["Test"]
    // let number = 0;
    const menuBook = document.querySelector('.menu-book')
    const orderList = document.querySelector('.orderList')
    const addButton = document.querySelectorAll('#addItem')
    // const removeButton = document.querySelectorAll('#removeItem');

    // console.log(removeButton)

    addButton.forEach(function(e){
        e.addEventListener('click', addItem)
    })

    // removeButton.forEach(function(e){
    //     e.addEventListener('click', removeItem)
    // })

    function addItem(event){
        let menu = event.target.parentElement
        
        const button = event.target
        const addedText = document.createElement('span')
        addedText.innerHTML = '<span>added!</span>'
        button.parentElement.replaceChild(addedText, button)

        // let menuInfo = menuName.querySelector('.menu_info')
        let menuName = menu.querySelector('.menu_name').innerText
        let menuPrice = menu.querySelector('.menu_price').innerText
        let menuID = menu.getElementsByTagName('input')[0].value

        console.log(menuID)
        let cartRow = document.createElement('div')
        cartRow.classList.add('menu_detail')
        cartRow.innerHTML = `
            <p class="menu_name">${menuName} - <span class="menu_price">Rp${menuPrice}</span></p>
            <input type="hidden" value="${menuID}" name="menuID[]">
            <input type="hidden" value="${menuPrice}" name="price[]">
            <div class="controller">
            <input type="number" value="1" min="1" name="qty[]">
            <button type="button" class="removeItem">REMOVE</button>
        `;    
                
        orderList.append(cartRow)

        // console.log(orderList);
        cartRow.getElementsByClassName('removeItem')[0].addEventListener('click', function(e){
            // console.log(event.target.paren)
            let menuInfo = e.target.parentElement.parentElement
            menuInfo.remove()
        })

    }    
            
            
    
    // function removeItem(e){
    //     // console.log(e.target.parentElement)
    //     // const names = menuBook.querySelector('.menu_name')
        
    //     // let menuInfo = e.target.parentElement
    //     // menuInfo.remove()
    // }








    // menus.forEach(function(e){
    //     // const removeButton = e.querySelector('#removeItem')
    //     const addButton = e.querySelector('#addItem')
    //     const name = e.querySelector('li').textContent
    //     // const qty = e.querySelector('#qty')

    //     addButton.addEventListener('click', function(e){
    //         let number = parseInt(qty.textContent)
    //         number++;
    //         qty.textContent = number;
    //         // console.log(qty.textContent);
    //         console.log(e.target.parentElement)
    //         // let parsedQty = parseInt(qty.textContent)
            
    //         // if(parsedQty > 0)
    //         //     selectedItem.push(name)
    //     })

    //     // removeButton.addEventListener('click', function(e){
    //     //     let number = parseInt(qty.textContent)
                        
    //     //     if(number > 0){
    //     //         number--;
    //     //     }

    //     //     qty.textContent = number
            
    //     // })
    //     // console.log(qty)

    //     // console.log(parsedQty)
    // })



    // menus.forEach(function(e){
    //     const qty = parseInt(e.querySelector('#qty').textContent)
    //     const name = e.querySelector('li').textContent
        
    //     console.log(qty)
        
    //     // if(qty > 0)
    //         selectedItem.push(name);        
    // })

  
    // console.log(addButton)
    // addButton.addEventListener('click', function (e){
        
    // })
