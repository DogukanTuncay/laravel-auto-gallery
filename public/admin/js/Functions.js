$(document).ready(function () {
    $('#aracSil').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var aracId = button.data('arac-id');
        var aracMarka = button.data('arac-marka');
        var aracModel = button.data('arac-model');

        var modal = $(this);
        modal.find('#aracMarkaSil').text(aracMarka);
        modal.find('#aracModelSil').text(aracModel);
        modal.find('#aracIdInputSil').val(aracId);
        // Sil düğmesine tıklanıldığında, burada aracId kullanarak silme işlemini yapabilirsiniz.
        $('#silButton').on('click', function () {
            $('#silForm').submit();
        });
    });
    $('#aracGiderEkle').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var aracId = button.data('arac-id');
        var aracMarka = button.data('arac-marka');
        var aracModel = button.data('arac-model');
        console.log(aracId);

        var modal = $(this);
        modal.find('#aracMarkaGider').text(aracMarka);
        modal.find('#aracModelGider').text(aracModel);
        modal.find('#aracIdInputGider').val(aracId);
        // Sil düğmesine tıklanıldığında, burada aracId kullanarak silme işlemini yapabilirsiniz.
        $('#giderButton').on('click', function () {
            $('#giderForm').submit();
        });
    });
});
