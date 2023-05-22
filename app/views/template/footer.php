<script>
    // const menus = document.querySelectorAll('.menu_name')
    // console.log(menus)
    // let select;
    // let selectedItem = ["Test"]
    // let number = 0;
    const orderInfo = document.querySelector('.orderInfo')
    const addButton = document.querySelectorAll('#addItem')

    addButton.forEach(function(e){
        e.addEventListener('click', addItem)
        
    })

    function addItem(event){
        
        let menu = event.target.parentElement
        console.log(menu)
        // let menuInfo = menuName.querySelector('.menu_info')
        let menuName = menu.querySelector('.menu_name').innerText
        let menuPrice = menu.querySelector('.menu_price').innerText
        let menuID = menu.getElementsByTagName('input')[0].value

        console.log(menuID)
        let cartRow = document.createElement('div')
        cartRow.innerHTML = ` 
            <div class="menu_info">
                <li class="menu_name">${menuName} - <span class="menu_price">Rp${menuPrice}</span></li>
                <input type="hidden" value="${menuID}" name="menuID[]">
                <input type="number" value="1" min="0" name="qty[]">
                <input type="hidden" value="${menuPrice}" name="price[]">
                <button id="removeItem">REMOVE</button>
            </div>
        `;

        orderInfo.append(cartRow)
    }




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

</script>
    
</body>
</html>