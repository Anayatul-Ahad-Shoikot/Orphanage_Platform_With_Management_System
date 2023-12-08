document.querySelector('.wrapper.flex_align_justify').style.display = 'none';
document.querySelector('.fil_form').style.display = 'none';
document.querySelector('.confirmation').style.display = 'none';
function showConditions() {
    document.querySelector('.container').style.display = 'none';
    document.querySelector('.fil_form').style.display = 'none';
    document.querySelector('.confirmation').style.display = 'none';
    document.querySelector('.wrapper.flex_align_justify').style.display = 'flex';
}

function showForm() {
    
    document.querySelector('.wrapper.flex_align_justify').style.display = 'none';
    document.querySelector('.container').style.display = 'none';
    document.querySelector('.confirmation').style.display = 'none';
    document.querySelector('.fil_form').style.display = 'block';
}

function goBack() {
    document.querySelector('.wrapper.flex_align_justify').style.display = 'none';
    document.querySelector('.fil_form').style.display = 'none';
    document.querySelector('.confirmation').style.display = 'none';
    document.querySelector('.container').style.display = 'block';
}

// function submitForm() {
//     document.querySelector('.wrapper.flex_align_justify').style.display = 'none';
//     document.querySelector('.fil_form').style.display = 'none';
//     document.querySelector('.confirmation').style.display = 'flex';
//     return false;
// }

// function finish(){
//     document.querySelector('.confirmation').style.display = 'none';
//     window.location.href = '/Root/Home_Page/U_HOME.php';
// }