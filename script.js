var machine = document.getElementsByClassName("machine")[0];
console.log(machine)


machine.addEventListener('change', function() {
    console.log(this.getAttribute('value'));
});