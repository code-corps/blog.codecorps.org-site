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

1. Create a new project - `composer create-project roots/bedrock`
 Access WP admin at `http://codecorps.dev/wp/wp-admin`

## Documentation

Bedrock documentation is available at [https://roots.io/bedrock/docs/](https://roots.io/bedrock/docs/).

## Contributing

Contributions are welcome from everyone. We have [contributing guidelines](https://github.com/roots/guidelines/blob/master/CONTRIBUTING.md) to help you get started.

## Community

Keep track of development and community news.

* Participate on the [Roots Discourse](https://discourse.roots.io/)
* Follow [@rootswp on Twitter](https://twitter.com/rootswp)
* Read and subscribe to the [Roots Blog](https://roots.io/blog/)
* Subscribe to the [Roots Newsletter](https://roots.io/subscribe/)
* Listen to the [Roots Radio podcast](https://roots.io/podcast/)
