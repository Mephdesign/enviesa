function createSlug() {
    var tekst = document.getElementById('nazwa').value;
    tekst = tekst.replace(/\s+/g, '-');
    tekst = tekst.toLowerCase();
    var polskieZnaki = {
        'ą': 'a', 'ć': 'c', 'ę': 'e', 'ł': 'l', 'ń': 'n', 'ó': 'o', 'ś': 's', 'ź': 'z', 'ż': 'z'
    };
    tekst = tekst.replace(/[ąćęłńóśźż]/g, function(match) {
        return polskieZnaki[match];
    });
    document.getElementById('slug').value = tekst;
}

$(document).ready(function() {
    $('.ckeditor').ckeditor();
});
