
@extends('layout.app')
@section('section')
<div id="main" class="main-section">

    <!-- ============ Page Header ============ -->

    <!-- ============ Page Header ============ -->
    <div data-zozo-parallax-image="http://www.altawafatechnicalservices.com/wp-content/uploads/2021/04/contact-us-2.jpg')}}"
        data-zozo-parallax-position="left top"
        class="page-title-section page-titletype-default page-titleskin-dark page-titlealign-center page-title-image-bg">
        <div class="page-title-wrapper-outer">

            <!-- ===== Video Background -->

            <div class="page-title-wrapper clearfix">
                <div class="container page-title-container">
                    <div class="page-title-captions">
                        <h1 class="entry-title">Contact Us</h1>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- ============ Page Header Ends ============ -->
    <div id="fullwidth" class="main-fullwidth main-col-full">
        <section class="wpb-content-wrapper">
            <section class="vc_row wpb_row vc_row-fluid vc-zozo-section typo-dark">
                <div class="zozo-vc-main-row-inner vc-normal-section">
                    <div class="container">
                        <div class="row">
                            <div
                                class="wpb_animate_when_almost_visible wpb_left-to-right left-to-right wpb_column vc_main_column vc_column_container vc_col-sm-2/5 typo-default wpb_animate_when_almost_visible wpb_left-to-right left-to-right">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_fadeInLeft fadeInLeft vc_custom_1618148344863"
                                            id="contact-row-2">
                                            <div class="wpb_wrapper">
                                                <h2 style="text-align: left;">Get in Touch</h2>
                                                <p>Visit us or simply send us an email anytime you want. If you
                                                    have any questions, please feel free to contact us.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="wpb_column vc_main_column vc_column_container vc_col-sm-1/5 typo-default">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="zozo-feature-box feature-box-style style-default-box style-sep-yes  wpb_animate_when_almost_visible wpb_bottom-to-top"
                                            id="cnt-feature-box">
                                            <div class="grid-item">
                                                <div
                                                    class="grid-box-inner grid-text-center grid-box-medium grid-box-icon-circle grid-icon-shape grid-shape-none">
                                                    <div class="grid-icon-wrapper no-hover shape-icon-circle"><i
                                                            class="fas fa-map-marker-alt grid-icon zozo-icon icon-shape icon-circle icon-skin-default icon-light pattern-1 icon-medium"></i>
                                                    </div>
                                                    <h4 class="grid-title-below grid-title ">Address</h4>
                                                    <div class="grid-desc">
                                                        <p style="text-align: center;">Dubai, UAE</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="wpb_column vc_main_column vc_column_container vc_col-sm-1/5 typo-default">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="zozo-feature-box feature-box-style style-default-box style-sep-yes  wpb_animate_when_almost_visible wpb_bottom-to-top"
                                            id="cnt-feature-box">
                                            <div class="grid-item">
                                                <div
                                                    class="grid-box-inner grid-text-center grid-box-medium grid-box-icon-circle grid-icon-shape grid-shape-none">
                                                    <div class="grid-icon-wrapper no-hover shape-icon-circle"><i
                                                            class="fas fa-phone-alt grid-icon zozo-icon icon-shape icon-circle icon-skin-default icon-light pattern-1 icon-medium"></i>
                                                    </div>
                                                    <h4 class="grid-title-below grid-title ">Phone No.</h4>
                                                    <div class="grid-desc">
                                                        <p style="text-align: center;"><a
                                                                href="tel:{{auth()->user() ? auth()->user()->number : ''}}">:{{auth()->user() ? auth()->user()->number : ''}}</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="wpb_column vc_main_column vc_column_container vc_col-sm-1/5 typo-default">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="zozo-feature-box feature-box-style style-default-box style-sep-yes  wpb_animate_when_almost_visible wpb_bottom-to-top"
                                            id="cnt-feature-box">
                                            <div class="grid-item">
                                                <div
                                                    class="grid-box-inner grid-text-center grid-box-medium grid-box-icon-circle grid-icon-shape grid-shape-none">
                                                    <div class="grid-icon-wrapper no-hover shape-icon-circle"><i
                                                            class="far fa-envelope grid-icon zozo-icon icon-shape icon-circle icon-skin-default icon-light pattern-1 icon-medium"></i>
                                                    </div>
                                                    <h4 class="grid-title-below grid-title ">Email Address</h4>
                                                    <div class="grid-desc">
                                                        <p style="text-align: center;"><a class="mail-text"
                                                                href="mailto::{{auth()->user() ? auth()->user()->contact_email : ''}}">:{{auth()->user() ? auth()->user()->contact_email : ''}}</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id="contact-row-2"
                class="vc_row wpb_row vc_row-fluid vc_custom_1618148127304 vc-zozo-section typo-dark">
                <div class="zozo-vc-main-row-inner vc-normal-section">
                    <div class="container">
                        <div class="row">
                            <div class="wpb_column vc_main_column vc_column_container vc_col-sm-6 typo-default">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p><iframe style="border: 0;"
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462565.197581445!2d54.94755498654818!3d25.075085310621684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sin!4v1618147798571!5m2!1sen!2sin"
                                                        width="100%" height="450"
                                                        allowfullscreen="allowfullscreen"></iframe></p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_main_column vc_column_container vc_col-sm-6 typo-default">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <h2>Contact Form</h2>

                                            </div>
                                        </div>

                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <div data-uniq='66a9f24b0e427'
                                                    class='uniq-66a9f24b0e427 formcraft-css form-live align-left'>
                                                    <script> window.formcraftLogic = window.formcraftLogic || {}; window.formcraftLogic[2] = []; </script>
                                                    <div class="fc-pagination-cover fc-pagination-1">
                                                        <div class="fc-pagination" style="width: 100%">
                                                            <div class="pagination-trigger " data-index="0">
                                                                <span class="page-number"><span>1</span></span>
                                                                <span class="page-name ">Step 1</span>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <style scoped="scoped">
                                                        @media (max-width : 480px) {
                                                            .fc_modal-dialog-2 .fc-pagination-cover .fc-pagination {
                                                                background-color: white !important;
                                                            }
                                                        }

                                                        .formcraft-css .fc-form.fc-form-2 .form-element .submit-cover .submit-button,
                                                        .formcraft-css .fc-form.fc-form-2 .form-element .fileupload-cover .button-file,
                                                        .formcraft-css .fc-form.fc-form-2 .form-element .field-cover .button,
                                                        .formcraft-datepicker .ui-datepicker-header,
                                                        .formcraft-datepicker .ui-datepicker-title {
                                                            background: #ed3237;
                                                            color: #fff;
                                                        }

                                                        .formcraft-datepicker td .ui-state-active,
                                                        .formcraft-datepicker td .ui-state-hover,
                                                        .formcraft-css .fc-form.fc-form-2 .form-element .slider-cover .ui-slider-range {
                                                            background: #ed3237;
                                                        }

                                                        #ui-datepicker-div.formcraft-datepicker .ui-datepicker-header,
                                                        .formcraft-css .fc-form .field-cover>div.full hr {
                                                            border-color: #096a42;
                                                        }

                                                        #ui-datepicker-div.formcraft-datepicker .ui-datepicker-prev:hover,
                                                        #ui-datepicker-div.formcraft-datepicker .ui-datepicker-next:hover,
                                                        #ui-datepicker-div.formcraft-datepicker select.ui-datepicker-month:hover,
                                                        #ui-datepicker-div.formcraft-datepicker select.ui-datepicker-year:hover {
                                                            background-color: #096a42;
                                                        }

                                                        .formcraft-css .fc-pagination>div.active .page-number,
                                                        .formcraft-css .form-cover-builder .fc-pagination>div:first-child .page-number {
                                                            background-color: #4488ee;
                                                            color: #fff;
                                                        }

                                                        #ui-datepicker-div.formcraft-datepicker table.ui-datepicker-calendar th,
                                                        #ui-datepicker-div.formcraft-datepicker table.ui-datepicker-calendar td.ui-datepicker-today a,
                                                        .formcraft-css .fc-form.fc-form-2 .form-element .star-cover label,
                                                        html .formcraft-css .fc-form.label-floating .form-element .field-cover.has-focus>span,
                                                        .formcraft-css .fc-form.fc-form-2 .form-element .customText-cover a,
                                                        .formcraft-css .prev-next>div span:hover {
                                                            color: #ed3237;
                                                        }

                                                        .formcraft-css .fc-form.fc-form-2 .form-element .customText-cover a:hover {
                                                            color: #096a42;
                                                        }

                                                        html .formcraft-css .fc-form.fc-form-2.label-floating .form-element .field-cover>span {
                                                            color: #666666;
                                                        }

                                                        html .formcraft-css .fc-form .final-success .final-success-check {
                                                            border: 2px solid #666666;
                                                        }

                                                        .formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="text"],
                                                        .formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="email"],
                                                        .formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="password"],
                                                        .formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="tel"],
                                                        .formcraft-css .fc-form.fc-form-2 .form-element .field-cover textarea,
                                                        .formcraft-css .fc-form.fc-form-2 .form-element .field-cover select,
                                                        .formcraft-css .fc-form.fc-form-2 .form-element .field-cover .time-fields-cover,
                                                        .formcraft-css .fc-form.fc-form-2 .form-element .field-cover .awesomplete ul {
                                                            color: #777;
                                                        }

                                                        .formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="text"],
                                                        .formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="password"],
                                                        .formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="email"],
                                                        .formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="radio"],
                                                        .formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="checkbox"],
                                                        .formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="tel"],
                                                        .formcraft-css .fc-form.fc-form-2 .form-element .field-cover select,
                                                        .formcraft-css .fc-form.fc-form-2 .form-element .field-cover textarea {
                                                            background-color: #fafafa;
                                                        }

                                                        .formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="radio"]:checked,
                                                        .formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="checkbox"]:checked {
                                                            border-color: #096a42;
                                                            background: #ed3237;
                                                        }

                                                        .formcraft-css .fc-form.fc-form-2 .form-element .star-cover label .star {
                                                            text-shadow: 0px 1px 0px #096a42;
                                                        }

                                                        .formcraft-css .fc-form.fc-form-2 .form-element .slider-cover .ui-slider-range {
                                                            box-shadow: 0px 1px 1px #096a42 inset;
                                                        }

                                                        .formcraft-css .fc-form.fc-form-2 .form-element .fileupload-cover .button-file {
                                                            border-color: #096a42;
                                                        }

                                                        .formcraft-css .fc-form.fc-form-2 .form-element .form-element-html input[type="password"]:focus,
                                                        .formcraft-css .fc-form.fc-form-2 .form-element .form-element-html input[type="email"]:focus,
                                                        .formcraft-css .fc-form.fc-form-2 .form-element .form-element-html input[type="tel"]:focus,
                                                        .formcraft-css .fc-form.fc-form-2 .form-element .form-element-html input[type="text"]:focus,
                                                        .formcraft-css .fc-form.fc-form-2 .form-element .form-element-html textarea:focus,
                                                        .formcraft-css .fc-form.fc-form-2 .form-element .form-element-html select:focus {
                                                            border-color: #ed3237;
                                                        }

                                                        .formcraft-css .fc-form.fc-form-2 .form-element .form-element-html .field-cover .is-read-only:focus {
                                                            border-color: #ccc;
                                                        }

                                                        .formcraft-css .fc-form.fc-form-2 {
                                                            font-family: inherit;
                                                        }

                                                        @media (max-width : 480px) {

                                                            html .dedicated-page,
                                                            html .dedicated-page .formcraft-css .fc-pagination>div.active {
                                                                background: white;
                                                            }
                                                        }
                                                    </style>
                                                    <div class="form-cover">
                                                        <form data-auto-scroll="" data-no-message-redirect=""
                                                            data-thousand="" data-decimal="." data-delay="5"
                                                            data-id="2"
                                                            class="fc-form fc-form-2 align- fc-temp-class spin- save-form- dont-submit-hidden- icons-hide- disable-enter- label-placeholder field-border-visible frame-hidden remove-asterisk-true field-alignment-left"
                                                            style="width: 100%; color: #666666; font-size: 100%; background: white">
                                                            <div class="form-page form-page-0" data-index="0">

                                                                <div class="form-page-content     ">
                                                                    <div data-identifier="field2" data-index="0"
                                                                        style="width: 100%"
                                                                        class=" form-element form-element-field2 options-false index-false form-element-0 default-false form-element-type-oneLineText is-required-true odd -handle">
                                                                        <div class="form-element-html">
                                                                            <div><label
                                                                                    class="oneLineText-cover field-cover  "><span
                                                                                        class="sub-label-false"><span
                                                                                            class="main-label"><span>Name</span></span><span
                                                                                            class="sub-label"></span></span>
                                                                                    <div><span
                                                                                            class="error"></span><input
                                                                                            type="text"
                                                                                            placeholder="Name"
                                                                                            make-read-only="false"
                                                                                            data-field-id="field2"
                                                                                            name="field2[]"
                                                                                            data-min-char=""
                                                                                            data-max-char=""
                                                                                            data-val-type=""
                                                                                            data-regexp=""
                                                                                            data-is-required="true"
                                                                                            data-allow-spaces="true"
                                                                                            class="validation-lenient"
                                                                                            data-placement="right"
                                                                                            data-toggle="tooltip"
                                                                                            tooltip=""
                                                                                            data-trigger="focus"
                                                                                            data-html="true"
                                                                                            data-input-mask=""
                                                                                            data-mask-placeholder=""
                                                                                            data-original-title=""><i
                                                                                            class="formcraft-icon formcraft-icon-type-"></i>
                                                                                    </div>
                                                                                </label></div>
                                                                        </div>

                                                                    </div>
                                                                    <div data-identifier="field3" data-index="1"
                                                                        style="width: 100%"
                                                                        class=" even form-element form-element-field3 options-false index-false form-element-1 default-false form-element-type-oneLineText is-required-true -handle">
                                                                        <div class="form-element-html">
                                                                            <div><label
                                                                                    class="oneLineText-cover field-cover  "><span
                                                                                        class="sub-label-false"><span
                                                                                            class="main-label"><span>Phone
                                                                                                No.</span></span><span
                                                                                            class="sub-label"></span></span>
                                                                                    <div><span
                                                                                            class="error"></span><input
                                                                                            type="text"
                                                                                            placeholder="Phone No."
                                                                                            make-read-only="false"
                                                                                            data-field-id="field3"
                                                                                            name="field3[]"
                                                                                            data-min-char=""
                                                                                            data-max-char=""
                                                                                            data-val-type="numbers"
                                                                                            data-regexp=""
                                                                                            data-is-required="true"
                                                                                            data-allow-spaces="false"
                                                                                            class="validation-lenient"
                                                                                            data-placement="right"
                                                                                            data-toggle="tooltip"
                                                                                            tooltip=""
                                                                                            data-trigger="focus"
                                                                                            data-html="true"
                                                                                            data-input-mask=""
                                                                                            data-mask-placeholder=""
                                                                                            data-original-title=""><i
                                                                                            class="formcraft-icon formcraft-icon-type-"></i>
                                                                                    </div>
                                                                                </label></div>
                                                                        </div>

                                                                    </div>
                                                                    <div data-identifier="field4" data-index="2"
                                                                        style="width: 100%"
                                                                        class=" form-element form-element-field4 options-false index-false form-element-2 default-false form-element-type-email is-required-true odd -handle">
                                                                        <div class="form-element-html">
                                                                            <div><label
                                                                                    class="email-cover field-cover  "><span
                                                                                        class="sub-label-true"><span
                                                                                            class="main-label"><span>Email</span></span><span
                                                                                            class="sub-label"></span></span>
                                                                                    <div><span
                                                                                            class="error"></span><input
                                                                                            placeholder="Email"
                                                                                            data-field-id="field4"
                                                                                            type="text"
                                                                                            data-val-type="email"
                                                                                            make-read-only=""
                                                                                            data-is-required="true"
                                                                                            name="field4"
                                                                                            class="validation-lenient"
                                                                                            data-placement="right"
                                                                                            data-toggle="tooltip"
                                                                                            tooltip=""
                                                                                            data-trigger="focus"
                                                                                            data-html="true"
                                                                                            data-original-title=""><i
                                                                                            class="formcraft-icon">email</i>
                                                                                    </div>
                                                                                </label></div>
                                                                        </div>

                                                                    </div>
                                                                    <div data-identifier="field5" data-index="3"
                                                                        style="width: 100%"
                                                                        class=" even form-element form-element-field5 options-false index-false form-element-3 default-false form-element-type-textarea is-required-false -handle">
                                                                        <div class="form-element-html">
                                                                            <div><label
                                                                                    class="textarea-cover field-cover  "><span
                                                                                        class="sub-label-false"><span
                                                                                            class="main-label"><span>Comments</span></span><span
                                                                                            class="sub-label"></span></span>
                                                                                    <div><span
                                                                                            class="error"></span><textarea
                                                                                            data-field-id="field5"
                                                                                            placeholder="Comments"
                                                                                            class="validation-lenient"
                                                                                            name="field5"
                                                                                            value="" rows="5"
                                                                                            data-min-char=""
                                                                                            data-max-char=""
                                                                                            data-is-required="false"
                                                                                            data-placement="right"
                                                                                            data-toggle="tooltip"
                                                                                            tooltip=""
                                                                                            data-trigger="focus"
                                                                                            data-html="true"
                                                                                            data-original-title=""
                                                                                            style="min-height: 110.734px"></textarea>
                                                                                        <div class="count-">
                                                                                            <span
                                                                                                class="current-count">0</span>
                                                                                            / <span
                                                                                                class="max-count "></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </label></div>
                                                                        </div>

                                                                    </div>
                                                                    <div data-identifier="field7" data-index="4"
                                                                        style="width: 100%"
                                                                        class=" form-element form-element-field7 options- index- form-element-4 default-false form-element-type-reCaptcha is-required-false odd -handle">
                                                                        <div class="form-element-html">
                                                                            <div>
                                                                                <div data-site-key="6LfmRLEaAAAAAIU-xEli_6ZUCrtVXvzY192rqGsq"
                                                                                    class="captcha-placeholder ">
                                                                                    reCaptcha v3</div><input
                                                                                    type="hidden"
                                                                                    class="recaptcha-token "
                                                                                    name="recaptcha-token">
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div data-identifier="field6" data-index="5"
                                                                        style="width: 100%"
                                                                        class=" even form-element form-element-field6 options-false index-false form-element-5 default-false form-element-type-submit is-required-false -handle">
                                                                        <div class="form-element-html">
                                                                            <div>
                                                                                <div
                                                                                    class="align-right wide-false submit-cover field-cover">
                                                                                    <button type="submit"
                                                                                        class="button submit-button"><span
                                                                                            class="text ">Submit</span><span
                                                                                            class="spin-cover"><i
                                                                                                style="color:"
                                                                                                class="loading-icon icon-cog animate-spin"></i></span></button>
                                                                                </div>
                                                                                <div class="submit-response ">
                                                                                </div><label><input type="text"
                                                                                        class="required_field"
                                                                                        name="website"
                                                                                        autocomplete="maple-syrup-pot"></label>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <div class="prev-next prev-next-1"
                                                            style="width: 100%; color: #666666; font-size: 100%; background: white">
                                                            <div><label><input type="text"
                                                                        class="  "></label><span
                                                                    class="inactive page-prev "><i
                                                                        class="formcraft-icon">keyboard_arrow_left</i>Previous</span>
                                                            </div>
                                                            <div><label><input type="text"
                                                                        class="  "></label><span
                                                                    class="page-next ">Next<i
                                                                        class="formcraft-icon">keyboard_arrow_right</i></span>
                                                            </div>
                                                        </div>
                                                    </div><a class="powered-by" target="_blank"
                                                        href="http://formcraft-wp.com/?source=pb" />FormCraft -
                                                    WordPress form builder</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div><!-- #fullwidth -->

</div><!-- #main -->
@endsection
