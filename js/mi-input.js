import { LitElement, html, css } from 'lit';

export class MiInput extends LitElement {

  static get formAssociated() {
    return true;
  }

  static styles = [
    css`
      :host {
        display: block;
      }
    `
  ];

  static get properties() {
    return {
      value: { type: String },
    };
  }

  constructor() {
    super();
    this.internals = this.attachInternals();
    this.value = '';
  }

  updated(changedProperties) {
    if(changedProperties.has('value')) {
      this.internals.setFormValue(this.value);
    }
  }

  render() {
    return html`
      <input 
        type="text" 
        .value="${this.value}" 
        name="username" 
        @input=${this.setFormData}
      >
    `;
  }

  setFormData() {
    this.value = this.shadowRoot.querySelector('input').value;
  }

  formResetCallback() {
    this.value = '';
  }
}
customElements.define('mi-input', MiInput);
