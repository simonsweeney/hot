let machine = document.getElementById("machine");
let maxDegrees = machine.max;


machine.oninput = function() {
    machineClass()
};


function machineClass() {
    let degree = machine.value;
    for (i = 0; i < maxDegrees; i++) {
        if ( degree > i){
            document.body.classList.add('degree-' + i);
        }
        if ( degree < i){
            document.body.classList.remove('degree-' + i);
        }
    }
}