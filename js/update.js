function startLiveUpdate() {
    const textViewCount = document.getElementById('viewCount');


    setInterval(function () {
        fetch('https://webhook.site/6af0c236-cf5d-43e2-9b31-705f53aa0983?id=10').then(function (response) {
            return response.json();
        }).then(function (data) {
            textViewCount.textContent = data.viewCount;
        }).catch(function (error) {
            console.log(error);
        });
    }, 1000000);
}

document.addEventListener('DOMContentLoaded', function () {
    startLiveUpdate();
});