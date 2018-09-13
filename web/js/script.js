$(document).ready(function () {
    function getImages(className) {
        $.ajax({
            url: '/files/photo/',
            type: 'POST',
            data: { className: className },
            success: function (data) {
                console.log(data.status);
                if (className === 'foto')
                {
                    fillPortfolio(data.data);
                }
                else if(className === 'icon')
                {
                    fillConnectWithUs(data.data);
                }
            },
            error:function(data){
                console.log(data.status);
            }
        });
    };

    function fillPortfolio(images)
    {
        var portfolio_data = '';
        $.each(images, function(key, value)
        {
            portfolio_data += '<div class="foto1"><div class="viewblok"><div class="view">';
            portfolio_data +=  'VIEW';
            portfolio_data +=  '</div></div>';
            portfolio_data += '<a href="#"><img src="/' + value.url + '" alt="' + value.alt + '"/></a></div>';
        });
        $('#foto').append(portfolio_data);
    }

    function fillConnectWithUs(images)
    {
        var icon_data = '';
        $.each(images, function(key, value)
        {
            icon_data += '<div class="icon1">';
            icon_data += '<a href="#"><img src="/' + value.url + '" alt="' + value.alt + '"/></a></div>';
        });
        $('#icon').append(icon_data);
    }

    getImages('foto');
    getImages('icon');
});