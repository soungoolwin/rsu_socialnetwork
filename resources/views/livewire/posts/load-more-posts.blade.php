<div>
    <button wire:click='loadMore'>This is testing this is testing</button>
    <div x-data="{
        checkScroll() {
            window.onscroll = function(ev) {
                if ((window.innerHeight + window.scrollY) >= document.body.scrollHeight) {
                    @this.call('loadMore')
                }
            };
        }
    }" x-init="checkScroll">
    </div>
