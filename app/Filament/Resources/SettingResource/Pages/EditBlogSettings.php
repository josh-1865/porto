<?php

namespace App\Filament\Resources\SettingResource\Pages;

use App\Filament\Resources\SettingResource;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Contracts\Support\Htmlable;

class EditBlogSettings extends EditRecord
{
    protected static string $resource = SettingResource::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil';

    public static function getNavigationLabel(): string
    {
        return __('Notes Section');
    }

    public function getTitle(): string | Htmlable
    {
        return __('Notes Section');
    }

    public function getSubheading(): string | Htmlable | null
    {
        return __('Manage your Blog Settings.');
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Toggle::make('blog.module_is_active')
                            ->default(true)
                            ->helperText(__('Show or hide the blog section on the website. This not affects your publications.'))
                            ->label(__('Show Notes Module')),
                    ]),
                Section::make(__('Notes Section'))
                    ->description(__('This module shows your latest posts from your Notes. All fields are optional.'))
                    ->icon('heroicon-o-pencil')
                    ->columns(2)
                    ->schema([
                        TextInput::make('blog.header_title')
                            ->label(__('Title'))
                            ->placeholder(__('hackable ♠'))
                            ->prefixIcon('heroicon-o-bars-3-bottom-left')
                            ->helperText(__('HTML allowed. Use the class "tl" to highlight a word')),
                        TextInput::make('blog.header_subtitle')
                            ->placeholder(__('hackable ♠'))
                            ->label(__('Subtitle'))
                            ->prefixIcon('heroicon-o-bars-3-bottom-left')
                            ->helperText(__('HTML allowed. Use the class "tl" to highlight a word')),
                        TextInput::make('blog.button')
                            ->label(__('Button Title'))
                            ->prefixIcon('heroicon-o-cube')
                            ->helperText(__('Define the Header Button Title')),
                        TextInput::make('blog.button_url')
                            ->prefixIcon('heroicon-o-link')
                            ->label(__('URL'))
                            ->helperText(__('Define the Header Button URL')),
                    ]),
                Section::make(__('Notes Pages Settings'))
                    ->description(__('Manage your Notes Pages Settings'))
                    ->icon('heroicon-o-document')
                    ->columns(3)
                    ->schema([
                        Toggle::make('blog.is_share_active')
                            ->default(true)
                            ->label(__('Share Feature'))
                            ->helperText(__('Enable or disable the share feature.')),
                        Toggle::make('blog.is_trend_widget_active')
                            ->default(true)
                            ->label(__('Trend Widget Feature'))
                            ->helperText(__('Enable or disable the trend widget feature.')),
                    ]),
                Section::make(__('Notes Settings'))
                    ->description(__('Manage your Notes Settings and Public Definitions.'))
                    ->icon('heroicon-o-cog-6-tooth')
                    ->columns(3)
                    ->schema([
                        Group::make()
                            ->columnSpan(2)
                            ->schema([
                                Toggle::make('blog.is_active')
                                    ->default(true)
                                    ->helperText(__('Show Blog Header'))
                                    ->label(__('Show Header')),
                                TextInput::make('blog.name')
                                    ->maxLength(255)
                                    ->placeholder(__('hackable ♠'))
                                    ->prefixIcon('heroicon-o-pencil')
                                    ->helperText(__('Blog Name'))
                                    ->columnSpanFull()
                                    ->label(__('Blog Name')),
                                TextInput::make('blog.description')
                                    ->maxLength(255)
                                    ->placeholder(__('hackable ♠'))
                                    ->prefixIcon('heroicon-o-pencil')
                                    ->helperText(__('Blog Description'))
                                    ->columnSpanFull()
                                    ->label(__('Blog Short Description')),
                            ]),
                        Group::make()
                            ->schema([
                                Toggle::make('blog.is_logo_active')
                                    ->default(true)
                                    ->helperText(__('Show Blog Logo'))
                                    ->label(__('Show Logo')),
                                CuratorPicker::make('blog.logo')
                                    ->label(__('Blog Logo')),
                                Checkbox::make('blog.is_invert_logo')
                                    ->default(false)
                                    ->helperText(__('Invert the logo color when dark mode is active.'))
                                    ->label(__('Invert Logo Color')),
                            ]),
                    ]),
            ]);
    }
}
