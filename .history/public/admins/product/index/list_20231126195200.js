function actionDelete(event) {
    event.preventDefault();
}

$(function () {
    $(document).on('click', '.action_delete', actionDelete);
});