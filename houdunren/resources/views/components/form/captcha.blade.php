
 <div class="form-group">
                <label for="captcha">图形验证码</label>
                <div class="input-group ">
                    <input type="text" class="form-control" name="captcha" id="captcha" placeholder="输入图形验证码"
                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append" style="cursor: pointer">
                        <img class="border" src="/captcha" onclick="this.src='/captcha?_'+Math.random()" alt="">
                    </div>

                </div>
                @error('captcha')

                 <small id="helpId" class=" form-text text-danger">{{ $message }}</small>
                @enderror
 </div>


