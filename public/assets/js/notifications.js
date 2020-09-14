(

    function(){


        let button = document.querySelectorAll(".button");
        let close = document.querySelectorAll(".close");
        let button_arr = Array.from(button);
        let body=document.getElementById('ok');
        let close_arr = Array.from(close);
        let model = document.querySelectorAll(".bg-model");
        let model_arr = Array.from(model);
        let  content=document.querySelectorAll(".model-content");
        let content_arr=Array.from(content);
        let  closebutton =document.querySelectorAll(".btn-close");
        let closebutton_arr=Array.from(closebutton);
        for (let i = 0; i < button_arr.length; i++) {
            button_arr[i].addEventListener("click", function()
            {
                model_arr[i].style.display = 'flex';
                model_arr[i].style.justifyContent='center';
                model_arr[i].style.alignItems='center';
                body.style.overflow='hidden';
                body.style.height='100vh';
                content_arr[i].style.position='absolute';
                console.log('12');


            });
        }
        for (let i = 0; i < button_arr.length; i++) {
            close_arr[i].addEventListener("click", function()
            {
                model_arr[i].style.display = 'none';
                body.style.overflow='auto';
                body.style.height='auto';
            });
        }
        for (let i = 0; i < button_arr.length; i++) {
            closebutton_arr[i].addEventListener("click", function()
            {
                model_arr[i].style.display = 'none';
                body.style.overflow='auto';
                body.style.height='auto';
            });
        }
    }

)();