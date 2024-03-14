# AST Metrics

[![Go](https://github.com/Halleck45/ast-metrics/actions/workflows/test.yml/badge.svg)](https://github.com/Halleck45/ast-metrics/actions/workflows/test.yml)

| Terminal application | HTML report |
| --- | ---------- |
| ![AST Metrics is a language-agnostic static code analyzer.](./docs/preview.gif) |![HTML report](./docs/preview-html-report.png) |

**AST Metrics is a language-agnostic static code analyzer.** It helps you to understand the structure of your code and to identify potential issues.

[Twitter](https://twitter.com/Halleck45) | [Contributing](.github/CONTRIBUTING.md)

## Usage

```bash
ast-metrics analyze <path>
```

Or generate HTML report:

```bash
ast-metrics analyze --report-html=<dir> <path>
```

You can also analyze more than one directory:

```bash
ast-metrics analyze <path1> <path2> <path3>
```

## Requirements

AST Metrics is a standalone package. It does not require any other software to be installed.

## Installation

| Platform | Architecture | Binary |
| -------- | ------------ | ------ |
| ![](./docs/emoji-tux.png) Linux    | arm64        | [Download](https://github.com/Halleck45/ast-metrics/releases/download/v0.0.5-alpha/ast-metrics_Linux_arm64)
| ![](./docs/emoji-tux.png) Linux    | i386         | [Download](https://github.com/Halleck45/ast-metrics/releases/download/v0.0.5-alpha/ast-metrics_Linux_i386)
| ![](./docs/emoji-tux.png) Linux    | x86_64       | [Download](https://github.com/Halleck45/ast-metrics/releases/download/v0.0.5-alpha/ast-metrics_Linux_x86_64)
| ![](./docs/emoji-apple.png) macOS    | arm64        | [Download](https://github.com/Halleck45/ast-metrics/releases/download/v0.0.5-alpha/ast-metrics_Darwin_arm64)
| ![](./docs/emoji-apple.png) macOS    | x86_64       | [Download](https://github.com/Halleck45/ast-metrics/releases/download/v0.0.5-alpha/ast-metrics_Darwin_x86_64)
| ![](./docs/emoji-windows.png) Windows  | arm64        | [Download](https://github.com/Halleck45/ast-metrics/releases/download/v0.0.5-alpha/ast-metrics_Windows_arm64.exe)
| ![](./docs/emoji-windows.png) Windows  | i386         | [Download](https://github.com/Halleck45/ast-metrics/releases/download/v0.0.5-alpha/ast-metrics_Windows_i386.exe)
| ![](./docs/emoji-windows.png) Windows  | x86_64       | [Download](https://github.com/Halleck45/ast-metrics/releases/download/v0.0.5-alpha/ast-metrics_Windows_x86_64.exe)

Or download the latest version of AST Metrics from the [releases page](https://github.com/Halleck45/ast-metrics/releases/latest).

## Supported languages

For the moment PHP, Python Golang are supported. But we are working on adding more languages.

## Contributing

AST Metrics is experimental and actively developed. We welcome contributions.

See [CONTRIBUTING](.github/CONTRIBUTING.md).

## License

See [LICENSE](LICENSE).
