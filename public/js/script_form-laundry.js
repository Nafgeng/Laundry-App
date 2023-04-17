const select = document.getElementById('laundry-status');
const buktiFoto = document.querySelectorAll('.content')

select.addEventListener('change', function() {
    const selectedOption = select.value;
    buktiFoto.forEach(function(content) {
        if (content.id === selectedOption + '-div') {
        content.style.display = 'block';
        } else {
        content.style.display = 'none';
        }
    });
});
