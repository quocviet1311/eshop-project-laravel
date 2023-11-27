function actionDelete(event) {
    event.preventDefault();
    alert('clicked')
}

$(function () {
    $(document).on('click', '.action_delete', actionDelete);
});