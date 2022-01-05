<div class="tab-pane mt-3" id="language">
    <form method="POST" enctype="multipart/form-data" class="mb-3"
          action="{{ route('admin.settings.update.languagesettings') }}">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="languages">{{__("Available languages")}}:</label>

                    <select id="languages" style="width:100%"
                            class="custom-select" name="languages[]"
                            multiple="multiple" autocomplete="off">
                        <option value="de">German</option>
                        <option value="en">English</option>
                        <option value="fr">French</option>
                        <option value="cz">Czech</option>
                    </select>

                    <label for="defaultLanguage">{{__("Default language")}}: <i data-toggle="popover"
                                                                                data-trigger="hover"
                                                                                data-content="{{__('The fallback Language, if something goes wrong')}}"
                                                                                class="fas fa-info-circle"></i></label>

                    <select id="defaultLanguage" style="width:100%"
                            class="custom-select" name="defaultLanguage"
                            autocomplete="off">
                        <option value="de">German</option>
                        <option value="en">English</option>
                        <option value="fr">French</option>
                        <option value="cz">Czech</option>
                    </select>
                </div>


                        <label for="datatable-language">Datable Language <i data-toggle="popover"
                                                                            data-trigger="hover"
                                                                            data-content="{{__('The Language of the Datatables. Grab the Language-Codes from here')}} https://datatables.net/plug-ins/i18n/"
                                                                            class="fas fa-info-circle"></i></label>
                        <input x-model="datatable-language" id="datatable-language" name="datatable-language" type="text" required
                               value="{{ App\Models\Settings::getValueByKey("SETTINGS::LOCALE:DATATABLES") }}"
                               class="form-control @error('datatable-language') is-invalid @enderror">
                    </div>
                </div>

                <div class="form-group">
                    <input value="true" id="autotranslate" name="autotranslate"
                           type="checkbox">
                    <label for="autotranslate">{{__('Auto-translate')}} <i data-toggle="popover"
                                                                           data-trigger="hover"
                                                                           data-content="{{__('If this is checked, the Dashboard will translate itself to the Clients language, if available')}}"
                                                                           class="fas fa-info-circle"></i></label>

                    <br/>
                    <input value="true" id="canClientChangeLanguage" name="canClientChangeLanguage"
                           type="checkbox">
                    <label for="canClientChangeLanguage">{{__('Let the Client change the Language')}} <i
                            data-toggle="popover"
                            data-trigger="hover"
                            data-content="{{__('If this is checked, Clients will have the ability to manually change their Dashboard language')}}"
                            class="fas fa-info-circle"></i></label>

                </div>
            </div>
        </div>

        <button class="btn btn-primary">{{ __('Save') }}</button>
    </form>


</div>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        $('.custom-select').select2();
    })
</script>
