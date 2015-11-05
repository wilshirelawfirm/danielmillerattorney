<!-- Modal -->
<div class="modal" id="modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-header">
      <h2>Choosing {{ config('attorney.name') }}</h2>
      <a href="#close" class="btn-close" aria-hidden="true">×</a> <!--CHANGED TO "#close"-->
    </div>
    <div class="modal-body">
      <p>Here is why people choose {{ config('attorney.name') }} and the Wilshire Law Firm team to represent them:</p>
      <ol>
      <li><strong>We provide free, no obligation consultations.</strong> We understand that taking on a lawyer is a big step and you want to know more details about your case before making a decision. Like true professionals, we will give you the information you seek without pressuring you one bit.</li>
      <li><strong>We operate on a contingency fee basis.</strong> In other words, you won’t have to pay any attorney’s fees or costs unless you obtain compensation. It’s a guarantee.</li>
      <li><strong>We are willing to come to you.</strong> If you hire us as your legal representatives, we will come directly to you, whether you’re at home or in the hospital.</li>
      <li><strong>We will advance the costs of your case.</strong> This includes court filing fees, document acquisition expenses, deposition costs, and other legal fees. We will also connect you with a medical provider that is willing to treat you on a lien basis, meaning your medical fees will be taken out of your recovery at the end so you won’t have to pay upfront.</li>
      <li><strong>We will give you the attention and respect you deserve.</strong> Whatever questions or concerns you have, we will do our best to answer them in quick fashion. We will also keep you informed on the status of your case at every turn. We will not leave you in the dark. Period.</li>
      </ol>
    </div>
    <div class="modal-footer">
      <a href="{{ route('contact') }}" class="pure-button pure-button-primary">I am Ready to Contact {{ config('attorney.first_name') }}</a>  <!--CHANGED TO "#close"-->
    </div>
    </div>
  </div>
</div>
<!-- /Modal -->