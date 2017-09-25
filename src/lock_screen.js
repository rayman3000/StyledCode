$(document).ready(() => {
    /**
     * When the modal-content is executed, This function must be called
     */
    $('#setOff').click(() => {
    });

    /**
     * When the modal-content's unlock button is clicked, This function must be called
     */
    $('#unLock').click(() => {
        $('.modal-content').attr('data-dismiss', "modal");
        location.href="index.html";  
    }); 
});