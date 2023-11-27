<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-dialog {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

    .modal-content {
        max-width: 500px;
        background-color: #fefefe;
        border: 1px solid #888;
        border-radius: 5px;
        padding: 20px;
        text-align: center;
    }

    .modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .modal-title {
        margin: 0;
    }

    .modal-footer {
        display: flex;
        justify-content: flex-end;
    }

    .close {
        color: #aaa;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }

    .btn {
        margin-left: 10px;
    }
</style>


<!-- The modal -->
<div id="popup" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Payment Type</h5>
                <label class="close" data-dismiss="modal">&times;</label>
            </div>

            <form id="paymentGatewayForm">
                <div class="modal-body">
                    <label class="m-2">
                        <input class="form-check-input payment-gateway" type="radio" name="payment_type"
                            value="paystack" checked>
                        {{ __('Paystack') }}
                    </label>
                    <label class="m-2">
                        <input class="form-check-input payment-gateway" type="radio" name="payment_type"
                            value="stripe">
                        {{ __('Stripe') }}
                    </label>
                </div>
                <hr>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary closeModal"
                        data-dismiss="modal">{{ __('Close') }}</button>
                    <button class="btn btn-primary btn-sm">{{ __('Proceed') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
