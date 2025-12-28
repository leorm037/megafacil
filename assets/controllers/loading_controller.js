import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
        
        static values = {
            hideDelay: Number
        };

    show(event) {
        if (typeof $ === 'undefined' || !$.LoadingOverlay) {
            return;
        }
        
        $.LoadingOverlay('show');
        
        if (this.hasHideDelayValue) {
            setTimeout(() => {
                $.LoadingOverlay("hide");
            }, this.hideDelayValue);
        }
    }

}
