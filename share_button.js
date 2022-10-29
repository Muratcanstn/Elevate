const shareBtn = document.querySelector('.share-btn');
const shareOptions = document.querySelector('.share-options');

console.log(shareBtn)
shareBtn.addEventListener('click', () => {
    shareOptions.classList.toggle('active');
    console.log('hello')
})
