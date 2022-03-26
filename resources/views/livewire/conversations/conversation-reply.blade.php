    <form x-data="conversationReplyState()"
          wire:submit.prevent="reply"
          enctype="multipart/form-data">

        @if($attachment)
            <div class="input-group">
                <div class="d-inline-flex align-items-center p-1 rounded border">

                    @if(in_array($attachment->extension(), ['png','jpg','jpeg','gif']))
                        <img src="{{ $attachment->temporaryUrl() }}" width="80px">


                    @elseif( in_array($attachment->extension(), ['wav', 'mp3']))
                        <i class="far fa-file-audio fa-5x"></i>

                    @elseif( in_array($attachment->extension(), ['mp4','wmv','avi','mov']))
                        <i class="fa-solid fa-video fa-5x"></i>
                    @endif
                </div>
            </div>
        @endif

    <div class="input-group">
        <div class="input-group-append">
            <label for="file_upload_id" class="input-group-text attach_btn">
                <i class="fas fa-paperclip"></i>
                <input wire:model="attachment" name="attachment" type="file"
                       id="file_upload_id" style="display: none">
                </input>
            </label>
        </div>

        <textarea
            wire:model="body"
            x-on:keydown.enter="submit"
            name="" class="form-control type_msg" placeholder="Type your message..." >
        </textarea>

        <div class="input-group-append">
            <button type="submit" x-ref="submit"
                class="input-group-text send_btn">
                <i class="fas fa-location-arrow"></i>
            </button>
        </div>
    </div>


        <script type="application/javascript">
            function conversationReplyState() {
                return {
                    attach () {
                        document.getElementById('file_upload_id').click();
                    },
                    submit () {
                        this.$refs.submit.click()
                    }
                }
            }
        </script>

    </form>
