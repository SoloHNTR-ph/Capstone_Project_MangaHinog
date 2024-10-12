import './bootstrap';
import 'flowbite';

const chapterListDiv = document.getElementById('chapterList');

function handleScroll() {
    const { scrollTop, scrollHeight, clientHeight } = chapterListDiv;
    if (scrollTop + clientHeight >= scrollHeight) {
        console.log('Reached the bottom of the list');
    }
}

chapterListDiv.addEventListener('scroll', handleScroll);

document.addEventListener('DOMContentLoaded', function() {
    let currentPage = 0;
    const totalPages = 10; 
    const imageUrlBase = '/path-to-your-images'; 

    document.getElementById('nextPage').addEventListener('click', () => {
        if (currentPage < totalPages - 1) {
            currentPage++;
            updateImage();
        }
        updateButtons();
    });

    document.getElementById('prevPage').addEventListener('click', () => {
        if (currentPage > 0) {
            currentPage--;
            updateImage();
        }
        updateButtons();
    });

    document.getElementById('loadAllPages').addEventListener('click', loadAllPages);

    function updateImage() {
        const imageUrl = `${imageUrlBase}/page-${currentPage + 1}.jpg`;
        document.getElementById('imageContainer').innerHTML = `<img src="${imageUrl}" alt="Page ${currentPage + 1}" class="max-h-full max-w-full object-contain" />`;
    }

    function updateButtons() {
        document.getElementById('prevPage').disabled = currentPage === 0;
        document.getElementById('nextPage').disabled = currentPage === totalPages - 1;
    }

    function loadAllPages() {
        let allPagesHtml = '';
        for (let i = 0; i < totalPages; i++) {
            const imageUrl = `${imageUrlBase}/page-${i + 1}.jpg`;
            allPagesHtml += `<img src="${imageUrl}" alt="Page ${i + 1}" class="max-h-full max-w-full object-contain mb-4" />`;
        }
        document.getElementById('imageContainer').innerHTML = allPagesHtml;
    }
});
