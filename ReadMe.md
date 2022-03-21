
# 🚫 No Front-end Plugin

### 🚨 Requires OctoberCMS 2.0

## ✨ What does this plugin do?
Simply removes the applcation\'s front-end and redirects it to the admin area.

## ❓ Why would I use this plugin?
Helpful for when you're building an application that has no front-end for users whatsoever.
Also useful when you're building an application that only has authenticated users access the admin area.

## 🖥️ How do I install this plugin?
1. Clone this repository into `plugins/albrightlabs/nofrontend`
2. Run the console command `php artisan october:migrate`
3. That's it, the front-end will redirect the scope icon will be hidden from the admin area navigation

## ⏫ How do I update this plugin?
Run either of the following commands:
* From the project root, run `php artisan october:util git pull`
* From the plugin root, run `git pull`

## 🚨 Are there any requirements for this plugin?
None, other than installation.

## 🔥 How to re-enable the front-end
* Either remove or disable the plugin

## ⚙️ Explanation of settings
* This plugin has no settings

## ✨ Future plans
* There are no future plans for this plugin, but please feel free to make requests by emailing them to [support@albrightlabs.com](support@albrightlabs.com)
