<!-- Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contactModalLabel">Contact </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('user.contact')}}" method="POST">
                    @csrf
                    <input class="from-control" type="hidden" value="{{ Auth::user()->name }}" name="name" readonly>

                    <input class="from-control" type="hidden" value="{{ Auth::user()->email }}" name="email"
                        readonly>
                    <input class="from-control" type="hidden" value="{{ Auth::user()->phone }}" name="phone"
                        readonly>
                    <div class="input-group">
                        <span class="input-group-text">Message</span>
                        <textarea class="form-control" aria-label="With textarea" name="message"></textarea>
                    </div>
                    <hr>
                    <div class="text-center ">
                        <input type="submit" class="btn btn-primary btn-outline-success text-danger" value="Send">
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
