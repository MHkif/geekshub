<div class="flex items-center justify-center gap-4 mb-6" x-data="avatarPreview">
    {{-- <div class="rounded-full bg-gray-200 "> 
        <img id="preview" src="" class="w-24 h-24 rounded-full object-cover" alt="">
    </div> --}}

    <div>
        <x-picture-button @click="document.getElementById('picture').click()" class="relative">
            {{-- <div class="flex gap-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15m0-3l-3-3m0 0l-3 3m3-3V15" />
                  </svg>
                    Upload Picture                
            </div> --}}
            <div class="rounded-full bg-gray-200 "> 
                <img id="preview" src="https://www.seekpng.com/png/detail/966-9665317_placeholder-image-person-jpg.png" class="w-24 h-24 rounded-full object-cover" alt="">
            </div>
            <input @change="showPreview(event)" type="file" name="avatar" id="avatar" class="absolute inset-0 -z-10 opacity-0">
        </x-picture-button>
    </div>
<script>
    function avatarPreview(){
        return {
            showPreview: (event) => {
                if (event.target.files.length > 0){
                    var src = URL.createObjectURL(event.target.files[0]);
                    document.getElementById('preview').src = src;
                }
            }
        }
    }
</script>
</div>