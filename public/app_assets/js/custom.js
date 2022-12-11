let s_counter = document.querySelector('#s_counter');
let to_number = s_counter.innerHTML;
s_counter.innerHTML = "";
let start = 0;
let counter_interval = setInterval(()=>{
    start++;
    s_counter.innerHTML = start;
    if (start == to_number) {
        clearInterval(counter_interval);
    }
}, 40);


