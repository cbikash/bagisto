<!-- Form Control Group -->

<!-- Type Text -->
<x-admin::form.control-group>
    <x-admin::form.control-group.label class="required">
        @lang('name')
    </x-admin::form.control-group.label>

    <x-admin::form.control-group.control
        type="text"
        name="name"
        rules="required"
        :value=""
        label="name"
        placeholder="name"
    />

    <x-admin::form.control-group.error control-name="name" />    
</x-admin::form.control-group>

<!-- Type Select -->
<x-admin::form.control-group>
    <x-admin::form.control-group.label>
        @lang('admin::app.catalog.families.create.column')
    </x-admin::form.control-group.label>

    <x-admin::form.control-group.control
        type="select"
        name="column"
        rules="required"
        :label="trans('admin::app.catalog.families.create.column')"
    >
        <!-- Default Option -->
        <option value="">
            @lang('admin::app.catalog.families.create.select-group')
        </option>

        <option value="1">
            @lang('admin::app.catalog.families.create.main-column')
        </option>

        <option value="2">
            @lang('admin::app.catalog.families.create.right-column')
        </option>
    </x-admin::form.control-group.control>

    <x-admin::form.control-group.error control-name="column" />
</x-admin::form.control-group>

<!--Type Checkbox -->
<x-admin::form.control-group>
    <x-admin::form.control-group.control
        type="checkbox"
        id="is_unique"
        name="is_unique"
        value="1"
        for="is_unique"
    />

    <x-admin::form.control-group.label
        for="is_unique"
    >
        @lang('admin::app.catalog.attributes.edit.is-unique')
    </x-admin::form.control-group.label>
</x-admin::form.control-group>

<!--Type Radio -->
<x-admin::form.control-group>
    <x-admin::form.control-group.control
        type="radio"
        id="is_unique"
        name="is_unique"
        value="1"
        for="is_unique"
    />

    <x-admin::form.control-group.label
        for="is_unique"
    >
        @lang('admin::app.catalog.attributes.edit.is-unique')
    </x-admin::form.control-group.label>
</x-admin::form.control-group>

<!-- basic/traditional form  -->
<x-admin::form action="">
    <x-admin::form.control-group>
        <x-admin::form.control-group.label>
            Email
        </x-admin::form.control-group.label>

        <x-admin::form.control-group.control
            type="email"
            name="email"
            rules="required|email"
            value=""
            label="Email"
            placeholder="email@example.com"
        />

        <x-admin::form.control-group.error control-name="email" />
    </x-admin::form.control-group>
</x-admin::form>

<!-- customized/ajax form -->
<x-admin::form
    v-slot="{ meta, errors, handleSubmit }"
    as="div"
>
    <form @submit="handleSubmit($event, callMethodInComponent)">
        <x-admin::form.control-group>
            <x-admin::form.control-group.label>
                Email
            </x-admin::form.control-group.label>

            <x-admin::form.control-group.control
                type="email"
                name="email"
                rules="required"
                :value="old('email')"
                label="Email"
                placeholder="email@example.com"
            />

            <x-admin::form.control-group.error control-name="email" />
        </x-admin::form.control-group>

        <button>Submit</button>
    </form>
</x-admin::form>

<!-- Accordion Component -->
<x-admin::accordion title="Test Accordion">
    <x-slot:header>
        Accordion Header
    </x-slot>

    <x-slot:content>
        Accordion Content
    </x-slot>
</x-admin::accordion>

<!-- Modal Component -->
<x-admin::modal>
    <x-slot:toggle>
        Modal Toggle
    </x-slot>

    <x-slot:header>
        Modal Header
    </x-slot>

    <x-slot:content>
        Modal Content
    </x-slot>
</x-admin::modal>

<!-- Drawer Component -->
<x-admin::drawer>
    <x-slot:toggle>
        Drawer Toggle
    </x-slot>

    <x-slot:header>
        Drawer Header
    </x-slot>

    <x-slot:content>
        Drawer Content
    </x-slot>
</x-admin::drawer>

<!-- Dropdown Component-->
<x-admin::dropdown>
    <x-slot:toggle>
        Toogle
    </x-slot>

    <x-slot:content>
        Content
    </x-slot>
</x-admin::dropdown>

<!-- Tinymce Component -->
<x-admin::form.control-group>
    <x-admin::form.control-group.label>
        Content
    </x-admin::form.control-group.label>

    <x-admin::form.control-group.control
        type="textarea"
        id="content"
        name="html_content"
        rules="required"
        :value="old('html_content')"
        label="Content"
        placeholder="Content"
        :tinymce="true"
    />

    <x-admin::form.control-group.error control-name="html_content" />
</x-admin::form.control-group>

<!-- SEO Title & Description Blade Componnet -->
<x-admin::seo />

<!-- Star Rating Component -->
<x-admin::star-rating
    :is-editable="false"
    :value="$review->rating"
/>

<!-- Exportdatagrid Component-->
<x-admin::datagrid.export
    src=""
/>

<!-- Datagrid Component -->
<x-admin::datagrid
    :src="route('admin.sales.orders.index')"
    :isMultiRow="true"
/>

<!-- Image Blade Component -->
<x-admin::media.images
    name="images[files]"
    allow-multiple="true"
    show-placeholders="true"
    :uploaded-images="$product->images"
/>

<!-- Video Blade Component -->
<x-admin::media.videos
    name="videos[files]"
    :allow-multiple="true"
    :uploaded-videos="$product->videos"
/>

<!-- Radio Tree Component -->
<x-admin::tree.view
    input-type="radio"
    name-field="parent_id"
    value-field="id"
    id-field="id"
    :items="json_encode($availableItems)"
    :value="$savedValue"
    :fallback-locale="config('app.fallback_locale')"
/>

<!-- Checkbox Tree Component | Individual -->
<x-admin::tree.view
    input-type="checkbox"
    selection-type="hierarchical"
    name-field="parent_id"
    value-field="key"
    id-field="key"
    :items="json_encode($availableItems)"
    :value="json_encode($savedValues)"
    :fallback-locale="config('app.fallback_locale')"
/>

<!-- Checkbox Tree Component | Hierarchical -->
<x-admin::tree.view
    input-type="checkbox"
    selection-type="hierarchical"
    name-field="parent_id"
    value-field="key"
    id-field="key"
    :items="json_encode($availableItems)"
    :value="json_encode($savedValues)"
    :fallback-locale="config('app.fallback_locale')"
/>
