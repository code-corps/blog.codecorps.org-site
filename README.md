# Code Corps WordPress (Bedrock + Sage)

![Code Corps Bedrock + Sage Logo](https://d3pgew4wbk2vb1.cloudfront.net/images/github/code-corps-site.png)

This repository contains the Bedrock file structure and Sage theme for the [Code Corps WordPress blog](https://blog.codecorps.org).

[Bedrock](https://roots.io/bedrock/) is a modern WordPress stack that helps you get started with the best development tools and project structure.

[Sage](https://roots.io/sage/) is the best WordPress starter theme with a modern front-end development workflow.

Much of the philosophy behind Bedrock is inspired by the [Twelve-Factor App](http://12factor.net/) methodology including the [WordPress specific version](https://roots.io/twelve-factor-wordpress/).

## Features

* Better folder structure
* Dependency management with [Composer](http://getcomposer.org)
* Easy WordPress configuration with environment specific files
* Environment variables with [Dotenv](https://github.com/vlucas/phpdotenv)
* Autoloader for mu-plugins (use regular plugins as mu-plugins)
* Enhanced security (separated web root and secure passwords with [wp-password-bcrypt](https://github.com/roots/wp-password-bcrypt))

Use [Trellis](https://github.com/code-corps/blog.codecorps.org-trellis-public) for additional features:

### Publicly available:
* Easy development environments with [Vagrant](http://www.vagrantup.com/)

### Privately held, for security:
* Easy server provisioning with [Ansible](http://www.ansible.com/) (Ubuntu 14.04, PHP 5.6 or HHVM, MariaDB)
* One-command deploys

## Requirements

* PHP >= 5.5
* Composer - [Install](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)

## Installation

Clone this repository along with Trellis into the following directory structure:

```shell
blog.codecorps.org/      # → Root folder for this project
├── trellis-public/      # → Your clone of the public Trellis repository
├── trellis/             # → Your clone of the private Trellis repository (acccess limited; private for security)
└── site/                # → Your clone of this respoitory, a Bedrock-based WordPress site
    └── web/
        ├── wp/          # → WordPress core (don't touch!)
        └── app/         # → WordPress content directory (themes, plugins, etc.)
            └── web/themes/codecorps  # → Code Corps theme directory (where most blog dev work will happen)
```

1. Create a new project - `composer create-project roots/bedrock`
 Access WP admin at `http://codecorps.dev/wp/wp-admin`

## Documentation

Bedrock documentation is available at [https://roots.io/bedrock/docs/](https://roots.io/bedrock/docs/).

Sage documentation is available at [https://roots.io/sage/docs/](https://roots.io/sage/docs/).

## Contributing

Contributions are welcome from everyone. We have [contributing guidelines](https://github.com/blog.codecorps.org-site/blob/master/CONTRIBUTING.md) to help you get started.

## Community

Join the Code Corps community at [https://codecorps.org/code-corps/code-corps]([https://codecorps.org/code-corps/code-corps])
