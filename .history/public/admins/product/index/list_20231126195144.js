function actionDelete(event) {
    event.prevent
}

$(function () {
    $(document).on('click', '.action_delete', actionDelete);
});