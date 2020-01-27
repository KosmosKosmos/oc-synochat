# SynoChat

This simple plugin allows to send error and other messages to a Synology Chat channel. 
It makes use of [KosmosKosmos/laravel-synochat](https://github.com/KosmosKosmos/laravel-synochat) Laravel plugin. 

## Usage

The plugin registers two Settings that can be found under **SynoChat Settings**. 
These are your Synology Chat URL and your channel's token. Consult the [Synology Documentation](https://www.synology.com/en-us/knowledgebase/DSM/tutorial/Collaboration/How_to_configure_webhooks_and_slash_commands_in_Chat_Integration)
on the matter of how to get these data. 

**PLEASE NOTE:** For URL, enter domain address only, without protocol or GET parameters. For token, enter the whole token. Tokens normally start and end with `%22`.

In code you can now use the `KosmosKosmos\SynoChat\Facades\SynoLog` facade to pass the errors to your Synology Chat channel in a way similar to standard error logging.
```
SynoLog::error('An error has occured!!!');
```

        