export default function handleEl() {
    const btnsQuests = document.querySelectorAll(".questions__quest__btn");
    const btnsFeatures = document.querySelectorAll('.features__item');
    const features = document.querySelectorAll('.features__tab');

    // Event Listeners:
    btnsQuests.forEach(btn => btn.addEventListener('click', handleQuest));
    btnsFeatures.forEach(btn => btn.addEventListener('click', handleFeature));

    // Functions: 
    function handleQuest(e) {
        e.stopPropagation();
        const $questSelected = e.target.parentElement.children[1];

        if(e.target.id !== 'icon') {
            $questSelected.classList.toggle('questions__anwers--active');
            $questSelected.classList.toggle('questions__anwers');
        }  
    };

    function handleFeature(e) {
        const $el = e.target;
        let feature;

        if(!$el.classList.contains('features__item--selected')) {
            btnsFeatures.forEach(btn => btn.classList.remove('features__item--selected'));
            $el.classList.add('features__item--selected');

            feature = e.path[2].childNodes[$el.dataset.id];
            features.forEach(feature => {
                feature.classList.remove('features__tab--active');
                feature.classList.add('features__tab--disable');
            });

            feature.classList.remove('features__tab--disable');
            feature.classList.add('features__tab--active');
        }
    }

    features.forEach(feature => {
        if(!feature.classList.contains('features__tab--active'))
            feature.classList.add('features__tab--disable');
    });
}