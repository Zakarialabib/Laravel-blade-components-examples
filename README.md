# Laravel Blade Components Examples 

This repository contains examples of blade components and how to use them in your Laravel project.

Share your blade components with the community by creating a pull request.

# 1. Accordion

The accordion component is a simple component that allows you to create an accordion with a title and content.

## 1.1 Usage

```
<x-accordion title="Accordion Title" id="accordion-1">
    <p>Accordion Content</p>
</x-accordion>
```

# 2. Alert

The alert component is a simple component that allows you to create an alert with a title and content.

## 2.1 Usage of error compontent

```
@error('name')
    <x-alert.error>{{ $message }}</x-alert.error>
@enderror
```

# 3. Button

The button component is a simple component that allows you to create a button with a title and content.

## 3.1 Usage of button component

```
<x-button type="submit" primary class="mt-4">
    {{ __('Register') }}
</x-button>
```

## 3.2 Usage of button-variant component

```
<x-button-variant type="submit" variant="primary" class="mt-4">
    {{ __('Register') }}
</x-button-variant>
```

## 3.3 Usage of button-custom component

```

<x-button-custom color="blue" size="md">
    Button
</x-button-custom>

<x-button-custom color="red" size="sm">
    Button
</x-button-custom>

<x-button-custom color="green" size="lg">
    Button
</x-button-custom>

```

# 4. Card

The card component is a simple component that allows you to create a card with a title and content.

## 4.1 Usage of card component

```
<x-card title="Card Title" id="card-1">
    <p>Card Content</p>
</x-card>
```

## 4.2 Usage of auth-card component

```
<x-auth-card title="Card Title" id="card-1">
    <p>Card Content</p>
</x-auth-card>
```

# 5. Date



