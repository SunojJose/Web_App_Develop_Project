var images = [
    "./images/banner/ipad.png",
    "./images/banner/iphoneX.jpg",
    "./images/banner/295-A.jpg",
    "./images/banner/iphone11.jpg",
    "./images/banner/iphone-12.png",
    "./images/banner/nt20u.jpg"

];

var html_img = "";

function shuffleArray(array){
    
    for(let index = array.length - 1; index > 0; index--) {
        const random_index = Math.floor(Math.random() * (index + 1));
        [array[index], array[random_index]] = [array[random_index], array[index]];
    }

    return array;
}


function displayImages() {

    images = shuffleArray(images);

    images.forEach((img) => {
        html_img += '<div class="item"><img src="' + img + '" alt="banner" class="img-fluid"></div>';
        document.getElementById("banner-img").innerHTML = html_img;
    });
}

displayImages();

